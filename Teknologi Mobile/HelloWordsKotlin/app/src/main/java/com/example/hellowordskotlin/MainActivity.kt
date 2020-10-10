package com.example.hellowordskotlin

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.Toast

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        val add_btn = findViewById<Button>(R.id.btn_add)
        add_btn.setOnClickListener{
            Toast.makeText(this@MainActivity, "Berhasil", Toast.LENGTH_LONG).show()
        }
        val close_btn = findViewById<Button>(R.id.btn_close)
        close_btn.setOnClickListener{
            Toast.makeText(this@MainActivity, "Anda menekan tombol close", Toast.LENGTH_LONG).show()
        }

    }
}