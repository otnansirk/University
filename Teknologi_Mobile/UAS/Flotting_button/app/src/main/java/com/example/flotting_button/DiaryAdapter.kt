package com.example.flotting_button

import android.app.AlertDialog
import android.content.Context
import android.text.Editable
import android.util.Log
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ArrayAdapter
import android.widget.EditText
import android.widget.TextView
import android.widget.Toast
import androidx.core.os.bundleOf
import androidx.navigation.findNavController
import com.google.firebase.database.FirebaseDatabase

class DiaryAdapter(val mctx : Context, val layoutId : Int, val listD : List<Diary>): ArrayAdapter<Diary> (mctx, layoutId, listD) {

    override fun getView(position: Int, convertView: View?, parent: ViewGroup): View {
        val layoutInflater : LayoutInflater = LayoutInflater.from(mctx)

        val view : View = layoutInflater.inflate(layoutId, null)

        val dtitle : TextView = view.findViewById(R.id.diaryTitle)
        val dcontent : TextView = view.findViewById(R.id.diaryContent)

        val data : Diary = listD[position]

        dtitle.text = data.id
        dtitle.text = if (data.title.length <= 10) data.title else data.title.substring(10)+"..."
        dcontent.text = if (data.diary.length <= 20) data.diary else data.diary.substring(0,0)+"..."

        view.setOnClickListener {
//            Toast.makeText(context, position.toString(), Toast.LENGTH_SHORT).show()
            showDialog(data ,view)
        }

        return view
    }

    fun showDialog(data: Diary, v: View){
        val builder = AlertDialog.Builder(mctx)

        val inflater = LayoutInflater.from(mctx)
        val view = inflater.inflate(R.layout.diary_detail_dialog, null)

        val dtitle : TextView = view.findViewById(R.id.diaryTitleDialog)
        val dcontent : TextView = view.findViewById(R.id.diaryContentDialog)

        dtitle.text = data.title
        dcontent.text = data.diary

        builder.setView(view)
        builder.setNegativeButton("Delete"){ p0,p1 ->
            val itemdiary = FirebaseDatabase.getInstance().getReference("Diary").child(data.id)
            itemdiary.removeValue()
            notifyDataSetChanged()
            Toast.makeText(context, "Deleted Successfully", Toast.LENGTH_SHORT).show()
        }
        builder.setPositiveButton("Update") {p0,p1 ->
            val dt = bundleOf(
                    Pair("id", data.id),
                    Pair("title", data.title),
                    Pair("diary", data.diary)
            )
            v.findNavController().navigate(R.id.action_FirstFragment_to_editDiaryFragment2, dt)
//            detailData(data)
        }

        val alert = builder.create()
        alert.show()
    }

}