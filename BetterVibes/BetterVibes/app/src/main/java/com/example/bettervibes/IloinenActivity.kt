package com.example.bettervibes

import android.os.Bundle
import androidx.appcompat.app.AppCompatActivity
import com.example.bettervibes.databinding.ActivityIloinenBinding

class IloinenActivity : AppCompatActivity() {

    private lateinit var binding: ActivityIloinenBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)

        // Ota View Binding käyttöön
        binding = ActivityIloinenBinding.inflate(layoutInflater)
        setContentView(binding.root)

        // Takaisin-napin toiminnallisuus
        binding.backButton.setOnClickListener {
            finish() // Palauttaa käyttäjän edelliseen aktiviteettiin
        }
    }
}

