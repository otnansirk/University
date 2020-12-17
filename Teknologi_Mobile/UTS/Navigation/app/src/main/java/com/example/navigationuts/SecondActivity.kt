package com.example.navigationuts

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Toast
import androidx.recyclerview.widget.LinearLayoutManager
import com.example.navigationuts.adapters.CourseAdapter
import com.example.navigationuts.models.Courses
import kotlinx.android.synthetic.main.activity_second.*

class SecondActivity : AppCompatActivity() {

    val list = ArrayList<Courses>()

    val listCourses = arrayOf(
        arrayOf("Manajemen Proyek", "2", "Cuk Subiantoto, S.Kom., M.Kom"),
        arrayOf("Proyek Pengembangan Aplikasi Web", "3", "Badiyanto, S.Kom., M.Kom"),
        arrayOf("Praktikum Pemrograman Berbasis Mobil", "1", "L.N.Harnaningrum, S.Si., M.T"),
        arrayOf("Pemrograman Berbasis Mobile", "3", "L.N.Harnaningrum, S.Si., M.T"),

        arrayOf("Praktikum Infrastuktur Big Data", "1", "Robby Cokro Buwono, S.Kom., M.Kom"),
        arrayOf("Infrastuktur Big Data", "3", "Robby Cokro Buwono, S.Kom., M.Kom"),
        arrayOf("Data Mining", "3", "Merarinta Ginting, S.T., M.Eng."),
        arrayOf("Teknologi Cloud Lanjut", "2", "M. Agung Nugroho, S.Kom., M.Kom"),

        arrayOf("Teknologi Web", "3", "Edi IskandarS.T., M.Cs."),

        arrayOf("Pendidikan Bahasa Indonesia", "3", "Mesti Woro Mahatmi, S.Sos., M.A"),
        arrayOf("Bahasa Inggris 4", "3", "Siska Lidya Revianti, S.Pd., M.Hum")

    )

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_second)

        supportActionBar!!.title = "Daftar Mata Kuliah dan Dosen"
        supportActionBar!!.setDisplayHomeAsUpEnabled(true)

        mRecycleView.setHasFixedSize(true)
        mRecycleView.layoutManager = LinearLayoutManager(this)

        for (i in 0 until listCourses.size) {

            list.add(Courses(listCourses.get(i)))

            if (listCourses.size - 1 == i) {
                // init adapter yang telah dibuat tadi
                val adapter = CourseAdapter(list)
                adapter.notifyDataSetChanged()

                //tampilkan data dalam recycler view
                mRecycleView.adapter = adapter
            }
        }
    }

    override fun onSupportNavigateUp(): Boolean {
        onBackPressed()
        return true
    }
}