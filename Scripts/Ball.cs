using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

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
      if(transform.position.z >= 25f || transform.position.z <= -4.3f) {
        Invoke("Restart", 1f);
      }
      //rb.AddForce(new Vector3(0, 0, 5f * Time.deltaTime), ForceMode.Impulse);
    }


    void Restart()
    {
      SceneManager.LoadScene("SampleScene", LoadSceneMode.Single);
    }
}
