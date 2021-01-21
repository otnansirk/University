package com.example.diary_qu

import android.os.Bundle
import androidx.fragment.app.Fragment
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.AdapterView
import android.widget.ListView
import android.widget.Toast
import androidx.navigation.fragment.findNavController
import androidx.swiperefreshlayout.widget.SwipeRefreshLayout
import com.example.flotting_button.R
import com.google.android.material.floatingactionbutton.FloatingActionButton
import com.google.firebase.database.*
import android.content.Context as applicationContext

/**
 * A simple [Fragment] subclass as the default destination in the navigation.
 */
class FirstFragment : Fragment() {

    lateinit var ref : DatabaseReference
    lateinit var list : MutableList<Diary>
    lateinit var listView: ListView

    override fun onCreateView(
            inflater: LayoutInflater, container: ViewGroup?,
            savedInstanceState: Bundle?
    ): View? {

        // Inflate the layout for this fragment
        return inflater.inflate(R.layout.fragment_first, container, false)
    }

    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)
        loadData(view)

        val swipeToRefresh = view.findViewById<SwipeRefreshLayout>(R.id.swipeToRefresh)
        swipeToRefresh.setOnRefreshListener {
            loadData(view)
            swipeToRefresh.isRefreshing = false
        }


        view.findViewById<FloatingActionButton>(R.id.fab).setOnClickListener {
            findNavController().navigate(R.id.action_FirstFragment_to_SecondFragment)
        }
    }

    fun loadData(view: View){
        ref =  FirebaseDatabase.getInstance().getReference("Diary")
        list = mutableListOf()
        listView = view.findViewById(R.id.listView)

        ref.addValueEventListener(object: ValueEventListener{
            override fun onCancelled(error: DatabaseError) {
                TODO("Not yet implemented")
            }

            override fun onDataChange(snapshot: DataSnapshot) {
                if (snapshot!!.exists()){
                    list.clear()
                    for (diary in snapshot.children){
                        val data = diary.getValue(Diary::class.java)
                        list.add(data!!)
                    }
                    val adapter = DiaryAdapter(context!!, R.layout.diary_list, list)
                    listView.adapter = adapter
                }
            }
        })
    }
}
