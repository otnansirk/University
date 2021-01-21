package com.pertemuan8

import androidx.lifecycle.LiveData
import androidx.lifecycle.MutableLiveData
import androidx.lifecycle.ViewModel

class CommunicationViewModel: ViewModel() {
    private val mBarang = MutableLiveData<String>()
    private val mHarga = MutableLiveData<String>()
    private val mJumlah = MutableLiveData<String>()
    private val mTotal = MutableLiveData<String>()

    val barang: LiveData<String>
        get() = mBarang

    fun setBarang(barang: String) {
        mBarang.value = barang
    }

    val harga: LiveData<String>
        get() = mHarga

    fun setHarga(harga: String) {
        mHarga.value = harga
    }
    val jumlah: LiveData<String>
        get() = mJumlah

    fun setJumlah(jumlah: String) {
        mJumlah.value = jumlah
    }
    val total: LiveData<String>
        get() = mTotal

    fun setTotal(total: String) {
        mTotal.value = total
    }

}