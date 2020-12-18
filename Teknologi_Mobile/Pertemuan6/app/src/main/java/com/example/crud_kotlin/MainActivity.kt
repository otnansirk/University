package com.example.crud_kotlin

import android.content.Intent
import android.net.Uri
import android.os.Bundle
import android.widget.ImageView
import androidx.appcompat.app.AppCompatActivity

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        findViewById<ImageView>(R.id.i5).setOnClickListener {
            val browserIntent = Intent(Intent.ACTION_VIEW, Uri.parse("https://yts.mx/torrent/download/3055155C658F0B745B1A24EDF08123BE416FD880"))
            startActivity(browserIntent)
        }
        findViewById<ImageView>(R.id.i2).setOnClickListener {
            val browserIntent = Intent(Intent.ACTION_VIEW, Uri.parse("https://yts.mx/torrent/download/532369FA74EFB335613FE244252467DD328D49B6"))
            startActivity(browserIntent)
        }
    }
}