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
        val barangEditText = view.findViewById<TextInputEditText>(R.id.textInputTextBarang)
        val hargaEditText = view.findViewById<TextInputEditText>(R.id.textInputTextHarga)
        val jumlahEditText = view.findViewById<TextInputEditText>(R.id.textInputTextJumlah)


        barangEditText.addTextChangedListener(
            object : TextWatcher {
                override fun beforeTextChanged(
                        charSequence: CharSequence, i: Int, i1: Int, i2: Int) {
                }

                override fun onTextChanged(charSequence: CharSequence,
                                           i: Int, i1: Int, i2: Int) {
                    communicationViewModel!!.setBarang(charSequence.toString())
                }

                override fun afterTextChanged(editable: Editable) {
            }
        })

        hargaEditText.addTextChangedListener(
            object : TextWatcher {
                override fun beforeTextChanged(
                        charSequence: CharSequence, i: Int, i1: Int, i2: Int) {
                }

                override fun onTextChanged(charSequence: CharSequence,
                                           i: Int, i1: Int, i2: Int) {
                    communicationViewModel!!.setHarga(charSequence.toString())
                }

                override fun afterTextChanged(editable: Editable) {
            }
        })

        jumlahEditText.addTextChangedListener(
                object : TextWatcher {
                    override fun beforeTextChanged(
                            charSequence: CharSequence, i: Int, i1: Int, i2: Int) {
                    }

                    override fun onTextChanged(charSequence: CharSequence,
                                               i: Int, i1: Int, i2: Int) {

                        communicationViewModel!!.setJumlah(charSequence.toString())
                        var harga = hargaEditText.text.toString()
                        var total = harga.toInt() * charSequence.toString().toInt()
                        communicationViewModel!!.setTotal("Total Bayar : "+total.toString())
                    }

                    override fun afterTextChanged(editable: Editable) {
                    }
                })

    }

    companion object {
        fun newInstance(): FirstFrament {
            return FirstFrament()
        }
    }
}