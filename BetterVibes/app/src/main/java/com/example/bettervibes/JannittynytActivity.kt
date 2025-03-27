package com.example.bettervibes

import android.content.Intent
import android.net.Uri
import android.os.Bundle
import android.widget.Button
import android.widget.TextView
import androidx.appcompat.app.AppCompatActivity

class JannittynytActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_jannittynyt)

        // Takaisin-painike
        val backButton: Button = findViewById(R.id.backButton)
        backButton.setOnClickListener {
            val intent = Intent(this, MainActivity::class.java)
            startActivity(intent)
            finish() // Sulkee JannittynytActivityn
        }

        // Musiikkilinkki
        val musicLink: TextView = findViewById(R.id.musicLink)
        musicLink.setOnClickListener {
            val intent = Intent(Intent.ACTION_VIEW, Uri.parse("https://www.youtube.com/watch?v=_BtXPQimVhg"))
            startActivity(intent)
        }
    }
}
