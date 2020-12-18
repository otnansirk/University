package akakom185411135.kotlin.pertemuan7

import android.os.Bundle
import android.view.*
import androidx.fragment.app.Fragment
import androidx.databinding.DataBindingUtil
import androidx.navigation.findNavController
import akakom185411135.kotlin.pertemuan7
.databinding.FragmentTitleBinding

class TitleFragment : Fragment() {
    override fun onCreateView(inflater: LayoutInflater,container: ViewGroup?,
                              savedInstanceState: Bundle?): View? {
        val binding = DataBindingUtil
            .inflate<FragmentTitleBinding>(inflater,
                R.layout.fragment_title,container,false)
        binding.playButton.setOnClickListener { view : View ->
            view.findNavController()
                .navigate(R.id.action_titleFragment_to_gameFragment)
        }
        return binding.root
    }
}
