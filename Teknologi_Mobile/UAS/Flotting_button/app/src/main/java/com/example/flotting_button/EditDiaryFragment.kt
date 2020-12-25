package com.example.flotting_button

import android.os.Bundle
import android.util.Log
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.Button
import android.widget.EditText
import android.widget.TextView
import android.widget.Toast
import androidx.fragment.app.Fragment
import androidx.navigation.fragment.findNavController
import com.google.firebase.database.FirebaseDatabase

/**
 * A simple [Fragment] subclass.
 * Use the [EditDiaryFragment.newInstance] factory method to
 * create an instance of this fragment.
 */
class EditDiaryFragment : Fragment() {

    override fun onCreateView(
            inflater: LayoutInflater, container: ViewGroup?,
            savedInstanceState: Bundle?
    ): View? {
        // Inflate the layout for this fragment
        return inflater.inflate(R.layout.fragment_edit_diary, container, false)
    }


    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {

        super.onViewCreated(view, savedInstanceState)

        val id = this.requireArguments().getString("id")
        val title = this.requireArguments().getString("title")
        val diary = this.requireArguments().getString("diary")


        val etitle = view.findViewById<EditText>(R.id.eInputTitle)
        val econtent = view.findViewById<EditText>(R.id.eInputDiary)
        etitle.setText(title)
        econtent.setText(diary)

        view.findViewById<TextView>(R.id.btnedit).setOnClickListener {

            val dtitle = view.findViewById<EditText>(R.id.eInputTitle).text.toString()
            val dcontent = view.findViewById<EditText>(R.id.eInputDiary).text.toString()

            val itemdiary = FirebaseDatabase.getInstance().getReference("Diary")

            val dataDiary = Diary(dtitle, dcontent, id.toString())

            itemdiary.child(id.toString()).setValue(dataDiary).addOnCompleteListener{
                Toast.makeText(context, "Edit Successfuly", Toast.LENGTH_SHORT).show()
                findNavController().navigate(R.id.action_editDiaryFragment2_to_FirstFragment)
            }
        }
    }

}
