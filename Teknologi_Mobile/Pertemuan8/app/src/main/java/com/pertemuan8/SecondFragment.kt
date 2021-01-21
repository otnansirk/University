package com.pertemuan8
import android.os.Bundle
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.TextView
import androidx.fragment.app.Fragment
import androidx.lifecycle.Observer
import androidx.lifecycle.ViewModelProviders

class SecondFragment : Fragment() {
    private var communicationViewModel: CommunicationViewModel? = null
    private var txtBarang: TextView? = null
    private var txtHarga: TextView? = null
    private var txtJumlah: TextView? = null
    private var txtTotal: TextView? = null

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        communicationViewModel = ViewModelProviders.
        of(requireActivity()).
        get(CommunicationViewModel::class.java)
    }

    override fun onCreateView(
            inflater: LayoutInflater, container: ViewGroup?,
            savedInstanceState: Bundle?
    ): View? {
        return inflater.inflate(R.layout.fragment_second,
                container, false)
    }

    override fun onViewCreated(view: View, savedInstanceState: Bundle?)
    {
        super.onViewCreated(view, savedInstanceState)
        txtBarang = view.findViewById(R.id.textViewBarang)
        txtHarga = view.findViewById(R.id.textViewHarga)
        txtJumlah = view.findViewById(R.id.textViewJumlah)
        txtTotal = view.findViewById(R.id.textViewTotal)

        communicationViewModel!!.barang.observe(requireActivity(), { s -> txtBarang!!.text = s })
        communicationViewModel!!.harga.observe(requireActivity(), { s -> txtHarga!!.text = s })
        communicationViewModel!!.jumlah.observe(requireActivity(), { s -> txtJumlah!!.text = s })
        communicationViewModel!!.total.observe(requireActivity(), { s -> txtTotal!!.text = s })

    }

    companion object {
        fun newInstance(): SecondFragment {
            return SecondFragment()
        }
    }
}