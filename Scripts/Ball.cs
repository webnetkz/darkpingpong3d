using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Ball : MonoBehaviour
{
    private Rigidbody rb;

    void Start()
    {
      rb = GetComponent<Rigidbody>();
      //rb.Sleep();
      rb.WakeUp();
      rb.AddForce(new Vector3(0, 0, -100f * Time.deltaTime), ForceMode.Impulse);
    }

    void Update()
    {
      //rb.AddForce(new Vector3(0, 0, 5f * Time.deltaTime), ForceMode.Impulse);
    }
}
