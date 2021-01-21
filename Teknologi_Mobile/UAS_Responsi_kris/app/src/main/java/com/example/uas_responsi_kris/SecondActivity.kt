package com.example.uas_responsi_kris

import android.os.Bundle
import androidx.appcompat.app.AppCompatActivity
import com.google.android.material.textfield.TextInputEditText


class SecondActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_second)

        val name = intent.getStringExtra("name")
        val nim  = intent.getStringExtra("nim")
        val address = intent.getStringExtra("address")

        val iName = findViewById<TextInputEditText>(R.id.name)
            iName.setText(name)
            iName.setEnabled(false)
        val iNim = findViewById<TextInputEditText>(R.id.nim)
            iNim.setText(nim)
            iNim.setEnabled(false)
        val iAdds = findViewById<TextInputEditText>(R.id.address)
            iAdds.setText(address)
            iAdds.setEnabled(false)
    }
}