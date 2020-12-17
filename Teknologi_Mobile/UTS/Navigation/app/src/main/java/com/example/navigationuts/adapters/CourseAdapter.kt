package com.example.navigationuts.adapters

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import androidx.recyclerview.widget.RecyclerView
import com.example.navigationuts.R
import com.example.navigationuts.models.Courses
import kotlinx.android.synthetic.main.course_list.view.*

class CourseAdapter(private val list: ArrayList<Courses>) : RecyclerView.Adapter<CourseAdapter.Holder>() {

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): Holder {
        return Holder(LayoutInflater.from(parent.context).inflate(R.layout.course_list, parent, false))
    }

    override fun onBindViewHolder(holder: Holder, position: Int) {
        holder.view.course_name.text = list?.get(position)?.name[0]
        holder.view.course_sks.text = "Sks : "+list?.get(position)?.name[1]
        holder.view.course_author.text = list?.get(position)?.name[2]
    }


    override fun getItemCount(): Int=list?.size

    class Holder(val view: View):RecyclerView.ViewHolder(view)

    internal interface ListItemClickListener {
        fun onListItemClick(position: Int)
    }

}