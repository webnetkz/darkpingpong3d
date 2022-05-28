using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class BotMove : MonoBehaviour
{
    public float t;
    public Rigidbody ball;

    void Update()
    {
      if(transform.position.x > -1.5f)
      {
        transform.position = new Vector3(-1.5f, transform.position.y, transform.position.z);
      }

      if(transform.position.x < -9.6f)
      {
        transform.position = new Vector3(-9.6f, transform.position.y, transform.position.z);
      }
    }

    void OnCollisionEnter(Collision other)
    {
      ball.AddForce(new Vector3(0, 0, -40f * Time.deltaTime), ForceMode.Impulse);
    }

    void FixedUpdate()
    {
      transform.position = new Vector3(Mathf.Lerp(transform.position.x, ball.position.x, t), 2.5f, 19);
    }
}
