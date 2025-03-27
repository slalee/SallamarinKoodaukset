package com.example.bettervibes

import android.content.Intent
import android.net.Uri
import android.os.Bundle
import android.widget.Button
import android.widget.SeekBar
import android.widget.TextView
import androidx.appcompat.app.AppCompatActivity

class VasynytActivity : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_vasynyt)

        // Takaisin-painike
        val backButton: Button = findViewById(R.id.backButton)
        backButton.setOnClickListener {
            finish()
        }


        val Vasyneisyys = findViewById<SeekBar>(R.id.Vasyneisyys)
        val tvVinkit = findViewById<TextView>(R.id.tvVinkit)

        // Asetetaan kuuntelija liukusäätimelle
        Vasyneisyys.setOnSeekBarChangeListener(object : SeekBar.OnSeekBarChangeListener {
            override fun onProgressChanged(seekBar: SeekBar?, progress: Int, fromUser: Boolean) {
                val vinkki = haeVinkki(progress)
                tvVinkit.text = vinkki // Näytetään vinkki tekstikentässä
            }

            override fun onStartTrackingTouch(seekBar: SeekBar?) {

            }

            override fun onStopTrackingTouch(seekBar: SeekBar?) {

            }
        })
        // ASMR-painike
        val asmrButton: Button = findViewById(R.id.btnasmrButton)
        asmrButton.setOnClickListener {
            val intent = Intent(Intent.ACTION_VIEW, Uri.parse("https://www.youtube.com/watch?v=CB_g47q-08g"))
            startActivity(intent)
        }
    }
    }

    // vinkit
    private fun haeVinkki(vasyneisyys: Int): String {
        return when (vasyneisyys) {
            in 0..2 -> "Sinun kannattaa levätä ja sulkea kaikki häiriötekijät hetkeksi. Rauhoittava musiikki voi auttaa."
            in 3..5 -> "Vaikutat hieman väsyneeltä. Käy ulkona raittiissa ilmassa tai pidä pieni tauko.Päiväunet."
            in 6..8 -> "Väsymys on jo selvästi läsnä. Yritä rauhoittua ja tehdä jotain rentouttavaa."
            in 9..10 -> "Vaikuttaa siltä, että tarvitset kunnolla lepoa. Jätä kaikki kiireet ja ole tarvittaessa yhteydessä terveydenhuoltoon."
            else -> "Valitse asteikko oikein."
        }
    }
