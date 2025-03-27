package com.example.bettervibes

import android.content.Intent
import android.os.Bundle
import android.widget.Button
import android.widget.Toast
import androidx.appcompat.app.AlertDialog
import androidx.appcompat.app.AppCompatActivity

class MainActivity : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        val btnIloinen = findViewById<Button>(R.id.btnIloinen)
        val btnVasyntynyt = findViewById<Button>(R.id.btnVasynyt)
        val btnJannittynyt = findViewById<Button>(R.id.btnJanna)
        val btnKiitollisuus = findViewById<Button>(R.id.btnKiitollisuus)

        // Painikkeiden toiminnallisuudet
        btnIloinen.setOnClickListener {
            varmistusDialogi("Iloinen")
        }

        btnVasyntynyt.setOnClickListener {
            varmistusDialogi("Väsynyt")
        }

        btnJannittynyt.setOnClickListener {
            varmistusDialogi("Jännittynyt")
        }

        btnKiitollisuus.setOnClickListener {
            varmistusDialogi("Kiitollisuuspäiväkirja")
        }
    }

    // Varmistusdialogi
    private fun varmistusDialogi(mood: String) {
        val builder = AlertDialog.Builder(this)
        builder.setTitle("Varmistus")
        builder.setMessage("Haluatko valita : $mood?")

        builder.setPositiveButton("Kyllä") { dialog, _ ->
            // Siirrytään oikeaan aktiviteettiin
            when (mood) {
                "Iloinen" -> siirryIloinenActivity()
                "Väsynyt" -> siirryVasyntynytActivity()
                "Jännittynyt" -> siirryJannittynytActivity()
                "Kiitollisuuspäiväkirja" -> siirryKiitollisuusActivity()
            }
            dialog.dismiss()
        }

        builder.setNegativeButton("Ei") { dialog, _ ->
            Toast.makeText(this, "Palaa valintaan", Toast.LENGTH_SHORT).show()
            dialog.dismiss()
        }

        builder.create().show()
    }

    // Siirrytään oikeaan aktiviteettiin
    private fun siirryIloinenActivity() {
        val intent = Intent(this, IloinenActivity::class.java)
        startActivity(intent)
    }

    private fun siirryVasyntynytActivity() {
        val intent = Intent(this, VasynytActivity::class.java)
        startActivity(intent)
    }

    private fun siirryJannittynytActivity() {
        val intent = Intent(this, JannittynytActivity::class.java)
        startActivity(intent)
    }


    private fun siirryKiitollisuusActivity() {
        val intent = Intent(this, KiitollisuusActivity::class.java)
        startActivity(intent)
    }
}
