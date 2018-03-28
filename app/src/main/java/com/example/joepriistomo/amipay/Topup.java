package com.example.joepriistomo.amipay;

/**
 * Created by Joepri Istomo on 1/6/2018.
 */

public class Topup {

    private int idSaldo;
    private int jumlahSaldo;

    public Topup(int idSaldo, int jumlahSaldo){
        this.idSaldo = idSaldo;
        this.jumlahSaldo = jumlahSaldo;

    }

    public int getIdSaldo(){
        return idSaldo;
    }

    public void setIdSaldo(int idSaldo){
        this.idSaldo = idSaldo;
    }

    public int getJumlahSaldo(){
        return jumlahSaldo;
    }

    public void setJumlahSaldo(int idSaldo){
        this.jumlahSaldo = idSaldo;
    }
}
