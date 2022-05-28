using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Star : MonoBehaviour
{
  private float maxHeight;
  private float minHeight;
  public float speed;
  private bool direction;


  void Start()
  {
    direction = true;
    maxHeight = transform.position.y + 3f;
    minHeight = transform.position.y - 2f;
  }

  void Update()
  {
    if(transform.position.y >= maxHeight)
    {
      direction = false;
    }
    if(transform.position.y <= minHeight)
    {
      direction = true;
    }
  }

  void FixedUpdate()
  {
    if(direction)
    {
      transform.position = new Vector3(transform.position.x, (transform.position.y + speed), transform.position.z);
    } 
    else
    {
      transform.position = new Vector3(transform.position.x, (transform.position.y - speed), transform.position.z);
    }
    transform.Rotate(new Vector3(Random.Range(0f, 1f), Random.Range(0f, 1f), Random.Range(0f, 1f)));
  }
}
