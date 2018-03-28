package com.example.joepriistomo.amipay;

import android.content.Context;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.toolbox.Volley;

/**
 * Created by Joepri Istomo on 1/7/2018.
 */

public class MySingleton {
    private static MySingleton mIntance;
    private RequestQueue requestQueue;
    private static Context mCtx;

    private MySingleton(Context context){
        mCtx = context;
        requestQueue = getRequestQueue();
    }


    public RequestQueue getRequestQueue(){
        if (requestQueue==null){
            requestQueue= Volley.newRequestQueue(mCtx.getApplicationContext());
        }
        return requestQueue;
    }

    public static synchronized MySingleton getIntance(Context context){
        if (mIntance==null){
            mIntance= new MySingleton(context);
        }
        return mIntance;
    }

    public<T> void addToRequestqueue(Request<T> request){
        requestQueue.add(request);
    }

}
