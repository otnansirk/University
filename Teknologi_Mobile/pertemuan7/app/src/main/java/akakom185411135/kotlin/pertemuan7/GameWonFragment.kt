package akakom185411135.kotlin.pertemuan7

import akakom185411135.kotlin.pertemuan7.databinding.FragmentGameWonBinding
import android.os.Bundle
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import androidx.databinding.DataBindingUtil
import androidx.fragment.app.Fragment
import androidx.navigation.findNavController

class GameWonFragment : Fragment() {
    override fun onCreateView(inflater: LayoutInflater,
                              container: ViewGroup?,
                              savedInstanceState: Bundle?): View? {
        val binding: FragmentGameWonBinding = DataBindingUtil.inflate(
            inflater, R.layout.fragment_game_won, container, false)
        binding.nextMatchButton.setOnClickListener { view: View ->
            view.findNavController().
            navigate(R.id.action_gameWonFragment_to_titleFragment)
        }
        return binding.root
    }
}
