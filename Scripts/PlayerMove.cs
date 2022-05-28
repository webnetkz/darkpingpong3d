using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class PlayerMove : MonoBehaviour
{
    public float speed;
    public Rigidbody ball;

    private bool moveForward;
    private bool moveBack;
    private bool moveRight;
    private bool moveLeft;

    void Start()
    {
      moveRight = true;
      moveLeft = true;
      moveForward = true;
      moveBack = true;
    }


    void Update()
    {
      if(transform.position.z >= 0f)
      {
        moveForward = false;
      } else { moveForward = true; }

      if(transform.position.z <= -3.8f)
      {
        moveBack = false;
        transform.position = new Vector3(transform.position.x, transform.position.y, -3.7f);
      } else { moveBack = true; }

      if(transform.position.x >= -1.5f)
      {
        moveRight = false;
        transform.position = new Vector3(-1.5f, transform.position.y, transform.position.z);
      } else { moveRight = true; }

      if(transform.position.x <= -9.6f)
      {
        transform.position = new Vector3(-9.6f, transform.position.y, transform.position.z);
        moveLeft = false;
      } else { moveLeft = true; }
    }

    void OnCollisionEnter(Collision other)
    {
      ball.AddForce(new Vector3(0, 0, 40f * Time.deltaTime), ForceMode.Impulse);
    }


    void FixedUpdate()
      {
        if(moveForward & Input.GetKey(KeyCode.W))
        {
          transform.position = new Vector3(transform.position.x, transform.position.y, transform.position.z + ( speed / 2 ) * Time.deltaTime);      
        }

        if(moveBack & Input.GetKey(KeyCode.S))
        {
          transform.position = new Vector3(transform.position.x, transform.position.y, transform.position.z - ( speed / 2 ) * Time.deltaTime);      
        }

        if(moveRight & Input.GetKey(KeyCode.D))
        {
          transform.position = new Vector3(transform.position.x + speed * Time.deltaTime, transform.position.y, transform.position.z);      
        }

        if(moveLeft & Input.GetKey(KeyCode.A))
        {
          transform.position = new Vector3(transform.position.x - speed * Time.deltaTime, transform.position.y, transform.position.z);      
        }
      }
}
