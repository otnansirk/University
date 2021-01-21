package com.example.uas_responsi_kris

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.Toast
import com.google.android.material.button.MaterialButton
import com.google.android.material.textfield.TextInputEditText

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        findViewById<MaterialButton>(R.id.btnProccess).setOnClickListener {

            val name = findViewById<TextInputEditText>(R.id.name).text
            val nim = findViewById<TextInputEditText>(R.id.nim).text
            val address = findViewById<TextInputEditText>(R.id.address).text
            val msg = name.toString() +" Sedang pindah halaman"
            Toast.makeText(
                this,
                msg,
                Toast.LENGTH_LONG
            ).show()

            val intent = Intent(this, SecondActivity::class.java);
            intent.putExtra("name", name.toString());
            intent.putExtra("nim", nim.toString());
            intent.putExtra("address", address.toString());
            startActivity(intent);
        }

    }
}