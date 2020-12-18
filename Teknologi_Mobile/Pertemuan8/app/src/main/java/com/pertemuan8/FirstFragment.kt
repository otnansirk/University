package com.pertemuan8

import android.os.Bundle
import android.text.Editable
import android.text.TextWatcher
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.Button
import android.widget.Toast
import androidx.core.os.bundleOf
import androidx.core.widget.addTextChangedListener
import androidx.fragment.app.Fragment
import androidx.lifecycle.ViewModelProviders

import com.google.android.material.textfield.TextInputEditText

class FirstFrament : Fragment() {
    private var communicationViewModel: CommunicationViewModel? = null

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        communicationViewModel =
            ViewModelProviders.of(requireActivity()).
            get(CommunicationViewModel::class.java)
    }

    override fun onCreateView(
            inflater: LayoutInflater, container: ViewGroup?,
            savedInstanceState: Bundle?
    ): View? {
        return inflater.inflate(R.layout.fragment_first,
                container, false)
    }

    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)
        val nameEditText = view.findViewById<TextInputEditText>(R.id.textInputTextName)
        val addressEditText = view.findViewById<TextInputEditText>(R.id.textInputTextAddress)
//        val btn_sendtosecondfragment = view.findViewById<Button>(R.id.btnSendToFragment)

        nameEditText.addTextChangedListener(
            object : TextWatcher {
                override fun beforeTextChanged(
                        charSequence: CharSequence, i: Int, i1: Int, i2: Int) {
                }

                override fun onTextChanged(charSequence: CharSequence,
                                           i: Int, i1: Int, i2: Int) {
                    Toast.makeText(activity, "Its toast!", Toast.LENGTH_SHORT).show()
                    communicationViewModel!!.setName(charSequence.toString())
                }

                override fun afterTextChanged(editable: Editable) {
            }
        })

        addressEditText.addTextChangedListener(
            object : TextWatcher {
                override fun beforeTextChanged(
                        charSequence: CharSequence, i: Int, i1: Int, i2: Int) {
                }

                override fun onTextChanged(charSequence: CharSequence,
                                           i: Int, i1: Int, i2: Int) {
                    Toast.makeText(activity, "Its toast!", Toast.LENGTH_SHORT).show()
                    communicationViewModel!!.setAddress(charSequence.toString())
                }

                override fun afterTextChanged(editable: Editable) {
            }
        })

//        btn_sendtosecondfragment.setOnClickListener(View.OnClickListener {
//            Toast.makeText(activity, "Its toast!", Toast.LENGTH_SHORT).show()
//        })

    }

    companion object {
        fun newInstance(): FirstFrament {
            return FirstFrament()
        }
    }
}