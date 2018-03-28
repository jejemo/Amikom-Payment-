package com.example.joepriistomo.amipay;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import java.util.HashMap;

public class detail_item1 extends AppCompatActivity implements View.OnClickListener {

    EditText etJml, etId;
    Button btn;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_detail_item1);
        etJml = (EditText) findViewById(R.id._jml);
        etId = (EditText) findViewById(R.id._id);

        btn = (Button)findViewById(R.id._bayarI1);

        btn.setOnClickListener(this);

    }

    private void perbaharuiData(){
        final String jumlahsaldo = etJml.getText().toString().trim();
        final String idsaldo = etId.getText().toString().trim();

        class UpdateEmployee extends AsyncTask<Void,Void,String> {
            ProgressDialog loading;
            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(detail_item1.this,"Proses Transaksi","Tunggu Sebentar",false,false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                Toast.makeText(detail_item1.this,s,Toast.LENGTH_LONG).show();
                Intent intent = new Intent(detail_item1.this, Home.class);
                startActivity(intent);
            }

            @Override
            protected String doInBackground(Void... params) {
                HashMap<String,String> hashMap = new HashMap<>();
                hashMap.put(Config.KEY_JML_SALDO,jumlahsaldo);
                hashMap.put(Config.KEY_ID_SALDO,idsaldo);
                RequestHandler rh = new RequestHandler();

                String s = rh.sendPostRequest(Config.URL_MIEAYAM,hashMap);

                return s;
            }
        }

        UpdateEmployee ue = new UpdateEmployee();
        ue.execute();
    }

    @Override
    public void onClick(View v) {
        if(v == btn){

            perbaharuiData();
        }
    }
}
