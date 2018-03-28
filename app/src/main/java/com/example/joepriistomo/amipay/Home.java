package com.example.joepriistomo.amipay;

import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.design.widget.BottomNavigationView;
import android.support.v4.app.FragmentManager;
import android.support.v7.app.AppCompatActivity;
import android.view.MenuItem;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;


import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonObjectRequest;

import org.json.JSONException;
import org.json.JSONObject;

public class Home extends AppCompatActivity {
    private TextView mTextMessage, etJml, etId;
    String URL_GET_SALDO = "http://192.168.43.137:8080/android/view.php";
    private BottomNavigationView.OnNavigationItemSelectedListener mOnNavigationItemSelectedListener

           = new BottomNavigationView.OnNavigationItemSelectedListener() {

        @Override
        public boolean onNavigationItemSelected(@NonNull MenuItem item) {
            FragmentManager fragmentManager = getSupportFragmentManager();
            android.support.v4.app.FragmentTransaction transaction = fragmentManager.beginTransaction();
            switch (item.getItemId()) {
                case R.id.navigation_home:
                    transaction.replace(R.id.content,new HomeFragment()).commit();
                    return true;
                case R.id.navigation_dashboard:
                    transaction.replace(R.id.content,new TransaksiFragment()).commit();
                    return true;
                case R.id.navigation_notifications:
                    transaction.replace(R.id.content,new ProfileFragment()).commit();
                    return true;
            }
            return false;
        }

    };

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);

        etJml = (TextView) findViewById(R.id.et_jml);
        etId = (TextView)findViewById(R.id.et_id);



        sendjsonrequest();

        /*mTextMessage = (TextView) findViewById(R.id.message);*/
        BottomNavigationView navigation = (BottomNavigationView) findViewById(R.id.navigation);
        navigation.setOnNavigationItemSelectedListener(mOnNavigationItemSelectedListener);

        FragmentManager fragmentManager = getSupportFragmentManager();
        android.support.v4.app.FragmentTransaction transaction = fragmentManager.beginTransaction();
        transaction.replace(R.id.content,new HomeFragment()).commit();
    }

    public void sendjsonrequest(){

        JsonObjectRequest jsonObjectRequest = new JsonObjectRequest(Request.Method.POST, URL_GET_SALDO,
                (String) null, new Response.Listener<JSONObject>() {
            @Override
            public void onResponse(JSONObject response) {

                try {
                    etId.setText(response.getString("Id"));
                    etJml.setText(response.getString("Jumlah"));


                } catch (JSONException e) {
                    e.printStackTrace();
                }

            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {

                Toast.makeText(Home.this,"Error",Toast.LENGTH_SHORT).show();
                error.printStackTrace();

            }
        });
        MySingleton.getIntance(Home.this).addToRequestqueue(jsonObjectRequest);

    }



    public void btnSaldo(View view) {
        Intent intent = new Intent(Home.this, Topup_menu.class);
        startActivity(intent);
    }

    public void btnclik(View view) {
        Intent intent = new Intent(Home.this, detail_item1.class);
        startActivity(intent);
    }

    public void btnclik2(View view) {
        Intent intent = new Intent(Home.this, detail_item2.class);
        startActivity(intent);
    }

    public void btnclik3(View view) {
        Intent intent = new Intent(Home.this, detail_item3.class);
        startActivity(intent);
    }

    public void btnclik4(View view) {
        Intent intent = new Intent(Home.this, detail_item4.class);
        startActivity(intent);
    }

    public void btnclik5(View view) {
        Intent intent = new Intent(Home.this, detail_item5.class);
        startActivity(intent);
    }

    public void btn_qrCode(View view) {

        Toast.makeText(getApplicationContext(),"Scan QR belum berfungsi",Toast.LENGTH_SHORT).show();
    }
}
