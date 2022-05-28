using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class TMP_platform2 : MonoBehaviour
{
  public Rigidbody ball;

    void OnCollisionEnter(Collision other)
    {
      ball.AddForce(new Vector3(0, 0, 80f * Time.deltaTime), ForceMode.Impulse);
    }
    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {
        
    }
}
