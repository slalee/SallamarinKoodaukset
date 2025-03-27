package com.example.bettervibes

import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.TextView
import java.io.File
import androidx.appcompat.app.AppCompatActivity

class KiitollisuusActivity : AppCompatActivity() {

    lateinit var tieto: EditText
    lateinit var tulos: TextView
    lateinit var tallenna: Button
    lateinit var nayta: Button
    lateinit var poista: Button

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_kiitollisuus)  // Tämä XML on sama kuin kauppalistassa, mutta muokattu aiheen mukaan

        // Yhdistetään näkymät oikeisiin ID:ihin
        tieto = findViewById(R.id.editTextText)
        tulos = findViewById(R.id.tulosTextView)
        tallenna = findViewById(R.id.btnTallenna)
        nayta = findViewById(R.id.btnTuo)
        poista = findViewById(R.id.btnDelete)

        // Tallenna-nappi
        tallenna.setOnClickListener {
            val text = tieto.text.toString().trim() // Poistetaan tyhjät välit
            if (text.isNotEmpty()) { // Lisätään vain, jos syöte ei ole tyhjä
                val file = File(filesDir, "kiitollisuus.txt")
                file.appendText("$text\n") // Lisätään uusi rivi kiitollisuuslistaan
                tieto.setText("") // Tyhjennetään syötekenttä
                nayta() // Päivitetään lista
            }
        }

        // Näytä-nappi
        nayta.setOnClickListener {
            nayta() // Päivitetään sisältö
        }

        // Tyhjennä-nappi
        poista.setOnClickListener {
            val file = File(filesDir, "kiitollisuus.txt")
            file.writeText("") // Tyhjennetään tiedosto
            tulos.text = "" // Tyhjennetään näkymä
        }

        // Takaisin-napin toiminnallisuus
        val backButton: Button = findViewById(R.id.backButton)
        backButton.setOnClickListener {
            finish() // Sulkee ja palaa edelliseen.
        }
    }


    private fun nayta() {
        val file = File(filesDir, "kiitollisuus.txt")
        if (file.exists()) { // Tarkistetaan, onko tiedosto olemassa
            val text = file.readText()
            tulos.text = text // Näytetään sisältö TextViewissä
        } else {
            tulos.text = "Ei vielä sisältöä." // Tiedosto ei ole olemassa
        }
    }
}