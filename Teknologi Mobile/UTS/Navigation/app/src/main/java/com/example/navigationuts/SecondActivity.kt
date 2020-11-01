package com.example.navigationuts

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Toast
import kotlinx.android.synthetic.main.activity_second.*

class SecondActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_second)
        btn_back.setOnClickListener {
            onBackPressed();
            Toast.makeText(this@SecondActivity, "Page loaded", Toast.LENGTH_SHORT).show()
        }
    }
}