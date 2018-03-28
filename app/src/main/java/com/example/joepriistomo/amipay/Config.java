package com.example.joepriistomo.amipay;

/**
 * Created by Joepri Istomo on 1/7/2018.
 */

public class Config {
    public static final String URL_MIEAYAM = "http://192.168.43.137:8080/android/kurangmieayam.php";
    public static final String URL_TOPUP = "http://192.168.43.137:8080/android/topup.php";
    public static final String URL_GET_SALDO = "http://192.168.43.137:8080/android/view.php";
    //Keys that will be used to send the request to php scripts
    public static final String KEY_ID_SALDO = "idsaldo";
    public static final String KEY_JML_SALDO = "jumlahsaldo";

    //JSON Tags
    public static final String TAG_JSON_ARRAY="result";
    public static final String TAG_ID = "idsaldo";
    public static final String TAG_JML = "jumlahsaldo";

    //employee id to pass with intent
    public static final String SALDO_ID = "s144";
}
