package com.example.joepriistomo.amipay;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import java.util.HashMap;
import java.util.Map;

public class Topup_menu extends AppCompatActivity implements View.OnClickListener {

    EditText etJml,etId;
    Button btnSimpan;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_topup_menu);

        etJml = (EditText)findViewById(R.id.et_jml);
        etId = (EditText)findViewById(R.id.et_id);

        btnSimpan = (Button)findViewById(R.id.btn_Bayartopup);

        btnSimpan.setOnClickListener(this);

    }

    private void perbaharuiData(){
        final String jumlahsaldo = etJml.getText().toString().trim();
        final String idsaldo = etId.getText().toString().trim();

        class UpdateEmployee extends AsyncTask<Void,Void,String> {
            ProgressDialog loading;
            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(Topup_menu.this,"Proses Transaksi","Tunggu Sebentar",false,false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                Toast.makeText(Topup_menu.this,s,Toast.LENGTH_LONG).show();
                Intent intent = new Intent(Topup_menu.this, Home.class);
                startActivity(intent);
            }

            @Override
            protected String doInBackground(Void... params) {
                HashMap<String,String> hashMap = new HashMap<>();
                hashMap.put(Config.KEY_JML_SALDO,jumlahsaldo);
                hashMap.put(Config.KEY_ID_SALDO,idsaldo);
                RequestHandler rh = new RequestHandler();

                String s = rh.sendPostRequest(Config.URL_TOPUP,hashMap);

                return s;
            }
        }

        UpdateEmployee ue = new UpdateEmployee();
        ue.execute();
    }

    @Override
    public void onClick(View v) {
        if(v == btnSimpan){
            perbaharuiData();
        }
    }
}
