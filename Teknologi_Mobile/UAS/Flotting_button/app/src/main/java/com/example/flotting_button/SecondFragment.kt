package com.example.flotting_button

import android.os.Bundle
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.Button
import android.widget.TextView
import android.widget.Toast
import androidx.fragment.app.Fragment
import com.google.android.material.snackbar.Snackbar
import com.google.android.material.textfield.TextInputEditText
import com.google.firebase.database.FirebaseDatabase
import androidx.navigation.fragment.findNavController

/**
 * A simple [Fragment] subclass as the second destination in the navigation.
 */
class SecondFragment : Fragment() {
    override fun onCreateView(
        inflater: LayoutInflater, container: ViewGroup?,
        savedInstanceState: Bundle?
    ): View? {
        // Inflate the layout for this fragment
        return inflater.inflate(R.layout.fragment_second, container, false)
    }

    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)

        view.findViewById<TextView>(R.id.button_second).setOnClickListener {
            savedata(view)
        }
    }

    private fun savedata(view: View) {

        val title = view.findViewById<TextInputEditText>(R.id.inputTitle).text.toString()
        val diary = view.findViewById<TextInputEditText>(R.id.inputDiary).text.toString()

        if (title.isEmpty()){
            Toast.makeText(activity, "Title is required", Toast.LENGTH_SHORT).show()
        }else if (diary.isEmpty()){
            Toast.makeText(activity, "Diary is required", Toast.LENGTH_SHORT).show()
        } else {
            val ref =  FirebaseDatabase.getInstance().getReference("Diary")

            val diaryId   = ref.push().key.toString()
            val dataDiary = Diary(title, diary, diaryId)

            ref.child(diaryId).setValue(dataDiary).addOnCompleteListener{
                Toast.makeText(activity, "Successfuly", Toast.LENGTH_SHORT).show()
            }
            findNavController().navigate(R.id.action_SecondFragment_to_FirstFragment)
        }
    }
}