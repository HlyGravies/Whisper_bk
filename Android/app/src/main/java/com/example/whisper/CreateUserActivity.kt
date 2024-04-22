package com.example.whisper

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.EditText

class CreateUserActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_create_user)

        val userNameEditText = findViewById<EditText>(R.id.userNameEdit)
        val userIdEditText = findViewById<EditText>(R.id.userIdEdit)
        val passwordEditText = findViewById<EditText>(R.id.userIdEdit)
        val rePasswordEditText = findViewById<EditText>(R.id.userIdEdit)
    }
}