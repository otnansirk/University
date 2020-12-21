package com.example.pertemuan11.view

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.TextView
import android.widget.Toast
import androidx.recyclerview.widget.RecyclerView
import com.bumptech.glide.Glide
import com.example.pertemuan11.R
import com.example.pertemuan11.model.Photo

class PhotoListAdapter(var photos: ArrayList<Photo>) : RecyclerView.Adapter<PhotoListAdapter.ViewHolder>() {

    fun updatePhotos(newPhotos: List<Photo>) {
        photos.clear()
        photos.addAll(newPhotos)
        notifyDataSetChanged()
    }

    override fun onCreateViewHolder(parent: ViewGroup, p1: Int) = ViewHolder(
        LayoutInflater.from(parent.context).inflate(R.layout.item_list, parent, false)
    )

    override fun getItemCount() = photos.size

    override fun onBindViewHolder(holder: ViewHolder, position: Int) {
        holder.bind(photos[position])
    }

    class ViewHolder(view: View) : RecyclerView.ViewHolder(view) {

        fun bind(photos: Photo) {
            itemView.findViewById<TextView>(R.id.tvTitle).text = photos.title
            itemView.setOnClickListener { view ->
                Toast.makeText(itemView.context,"Hello",Toast.LENGTH_LONG).show()
            }
            Glide.with(itemView.context).load(photos.thumbnail).into(itemView.findViewById(R.id.imageView))
        }
    }
}