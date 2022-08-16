package com.luqman.trackingluqman;

import androidx.annotation.NonNull;
import androidx.core.app.ActivityCompat;
import androidx.core.content.ContextCompat;
import androidx.core.content.PackageManagerCompat;
import androidx.fragment.app.FragmentActivity;

import android.Manifest;
import android.content.pm.PackageManager;
import android.content.res.Resources;
import android.os.Bundle;
import android.util.Log;
import android.widget.Toast;

import com.android.volley.DefaultRetryPolicy;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.RetryPolicy;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.BitmapDescriptor;
import com.google.android.gms.maps.model.BitmapDescriptorFactory;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MapStyleOptions;
import com.google.android.gms.maps.model.MarkerOptions;
import com.luqman.trackingluqman.databinding.ActivityMapsBinding;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.net.URL;
import java.util.ArrayList;
import java.util.Locale;

public class MapsActivity extends FragmentActivity implements OnMapReadyCallback {

    private GoogleMap mMap;
    public static final float MAPS_ZOOM = 13f;
    private ActivityMapsBinding binding;
    private static final String TAG =MapsActivity.class.getSimpleName();
    private ArrayList<LatLng> latLngs = new ArrayList<>();
    private static final String URL = "https://mobilelanjutlab20.000webhostapp.com/dynamicmarker.php";
    public static int REQUEST_LOCATION_PERMISSION = 1;
    private JSONArray result;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        binding = ActivityMapsBinding.inflate(getLayoutInflater());
        setContentView(binding.getRoot());

        // Obtain the SupportMapFragment and get notified when the map is ready to be used.
        SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
                .findFragmentById(R.id.map);
        mapFragment.getMapAsync(this);
    }

    /**
     * Manipulates the map once available.
     * This callback is triggered when the map is ready to be used.
     * This is where we can add markers or lines, add listeners or move the camera. In this case,
     * we just add a marker near Sydney, Australia.
     * If Google Play services is not installed on the device, the user will be prompted to install
     * it inside the SupportMapFragment. This method will only be triggered once the user has
     * installed Google Play services and returned to the app.
     */
    @Override
    public void onMapReady(GoogleMap googleMap) {
        mMap = googleMap;
        // Add a marker in Sydney and move the camera
        LatLng padang = new LatLng(-0.9143211675358133, 100.46644067598729);
        mMap.addMarker(new MarkerOptions().position(padang).title("Marker in Politeknik Negeri Padang"));
        mMap.moveCamera(CameraUpdateFactory.newLatLngZoom(padang,MAPS_ZOOM));
        latLngs.add(new LatLng(-0.9053278593987906, 100.3997870550893));
        latLngs.add(new LatLng(-0.8980968966502694, 100.39489569927181));
        latLngs.add(new LatLng(-0.912650590097612, 100.35738964306154));
        latLngs.add(new LatLng(-0.9241309641304855, 100.36249527441845));
        latLngs.add(new LatLng(-0.9601749790605091, 100.35306462766926));

        mMap.addMarker(new MarkerOptions().position(latLngs.get(0)).title("SMA N 5 Padang")
                .icon(BitmapDescriptorFactory.defaultMarker(BitmapDescriptorFactory.HUE_BLUE)));
        mMap.addMarker(new MarkerOptions().position(latLngs.get(1)).title("Rafhely Futsal")
                .icon(BitmapDescriptorFactory.defaultMarker(BitmapDescriptorFactory.HUE_AZURE)));
        mMap.addMarker(new MarkerOptions().position(latLngs.get(2)).title("Transmart")
                .icon(BitmapDescriptorFactory.defaultMarker(BitmapDescriptorFactory.HUE_YELLOW)));
        mMap.addMarker(new MarkerOptions().position(latLngs.get(3)).title("Masjid Raya Sumbar")
                .icon(BitmapDescriptorFactory.fromResource(R.drawable.mapmarker)));
        mMap.addMarker(new MarkerOptions().position(latLngs.get(4)).title("Masjid Al-Hakim")
                .icon(BitmapDescriptorFactory.defaultMarker(BitmapDescriptorFactory.HUE_CYAN)));


        enableMapsStyle(mMap);
        enableLongClick(mMap);
        enableMyLocation();
        enableDynamicMarker();

    }

    private void enableDynamicMarker() {
        RequestQueue requestQueue = Volley.newRequestQueue(getApplicationContext());
        StringRequest stringRequest = new StringRequest(Request.Method.GET, URL,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        Log.d("JSONResult", response.toString());
                        JSONObject jObj = null;
                        try {
                            jObj = new JSONObject(response);
                            result = jObj.getJSONArray("LOCATION");
                            for (int i = 0; i < result.length(); i++) {
                                JSONObject jsonObject1 = result.getJSONObject(i);
                                String latPoint = jsonObject1.getString("1");
                                String longPoint = jsonObject1.getString("2");
                                String locationName = jsonObject1.getString("3");
                                mMap.addMarker(new MarkerOptions()
                                        .position(new LatLng(Double.parseDouble(latPoint),
                                                Double.parseDouble(longPoint)))
                                        .title(Double.valueOf(latPoint).toString()
                                                + "," + Double.valueOf(longPoint).toString())
                                        .icon(BitmapDescriptorFactory.defaultMarker
                                                (BitmapDescriptorFactory.HUE_MAGENTA))
                                        .snippet(locationName));
                                mMap.moveCamera(CameraUpdateFactory.newLatLngZoom
                                        (new LatLng(-0.9021187, 100.3489041),
                                                13.0f));
                            }
                        } catch (NullPointerException e) {
                            e.printStackTrace();
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                    }
                }, new Response.ErrorListener(){
            @Override
            public void onErrorResponse(VolleyError error) {
                error.printStackTrace();
                Toast.makeText(MapsActivity.this, error.getMessage()
                        , Toast.LENGTH_SHORT).show();
            }
        });
        int socketTimeout = 10000;
        RetryPolicy policy = new DefaultRetryPolicy(socketTimeout,
                DefaultRetryPolicy.DEFAULT_MAX_RETRIES,
                DefaultRetryPolicy.DEFAULT_BACKOFF_MULT);
        stringRequest.setRetryPolicy(policy);
        requestQueue.add(stringRequest);
    }

    private void enableMyLocation() {
        if (ContextCompat.checkSelfPermission(this, Manifest.permission.ACCESS_FINE_LOCATION)
        == PackageManager.PERMISSION_GRANTED){
            mMap.setMyLocationEnabled(true);
        } else {
            ActivityCompat.requestPermissions(this, new String[]
                    {Manifest.permission.ACCESS_FINE_LOCATION}
                    ,REQUEST_LOCATION_PERMISSION);
        }

    }

    private void enableLongClick(GoogleMap mMap) {
        mMap.setOnMapLongClickListener(new GoogleMap.OnMapLongClickListener() {
            @Override
            public void onMapLongClick(@NonNull LatLng latLng) {
                String snippet = String.format(Locale.getDefault(),getString(R.string.lat_long_snippet),
                        latLng.latitude,latLng.longitude);
                mMap.addMarker(new MarkerOptions().position(latLng).title(getString(R.string.dropped_pin))
                        .snippet(snippet)
                        .icon(BitmapDescriptorFactory.defaultMarker(BitmapDescriptorFactory.HUE_BLUE)));

            }
        });
    }


    private void enableMapsStyle(GoogleMap mMap) {
        try {
            boolean success = mMap.setMapStyle(MapStyleOptions.loadRawResourceStyle(this, R.raw.maps_style));
            if(!success){
                Log.e(TAG, "Parsing map gagal");
            }


        }catch (Resources.NotFoundException e){
            Log.e(TAG, "Tidak dapat menemukan style");
        }
    }
}