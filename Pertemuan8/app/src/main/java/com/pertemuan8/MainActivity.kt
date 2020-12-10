package com.pertemuan8

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import android.widget.Button
import androidx.fragment.app.Fragment
import com.google.android.material.textfield.TextInputEditText
import kotlinx.android.synthetic.main.activity_main.*

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        view_pager.adapter = ViewPagerAdapter(
            this, supportFragmentManager)
        tabs.setupWithViewPager(view_pager)
    }
}
//
//// Extension function to replace fragment
//fun AppCompatActivity.replaceFragment(fragment: Fragment){
//    val fragmentManager = supportFragmentManager
//    val transaction = fragmentManager.beginTransaction()
//    transaction.replace(R.id.mainactivity,fragment)
//    transaction.addToBackStack(null)
//    transaction.commit()
//}
