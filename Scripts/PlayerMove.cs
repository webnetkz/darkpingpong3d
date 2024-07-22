using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class PlayerMove : MonoBehaviour
{
    public float speed;
    public Rigidbody ball;
    public AudioClip shotClip;

    private AudioSource audioSource;

    void Start()
    {
        audioSource = GetComponent<AudioSource>();
        audioSource.clip = shotClip;
    }

    void Update()
    {
        if (transform.position.z >= 0f)
        {
            transform.position = new Vector3(transform.position.x, transform.position.y, 0f);
        }

        if (transform.position.z <= -3.8f)
        {
            transform.position = new Vector3(transform.position.x, transform.position.y, -3.7f);
        }

        if (transform.position.x >= -1.5f)
        {
            transform.position = new Vector3(-1.5f, transform.position.y, transform.position.z);
        }

        if (transform.position.x <= -9.6f)
        {
            transform.position = new Vector3(-9.6f, transform.position.y, transform.position.z);
        }
    }

    void OnCollisionEnter(Collision other)
    {
        audioSource.Play();
        ball.AddForce(new Vector3(0, 0, 40f * Time.deltaTime), ForceMode.Impulse);
    }

    void FixedUpdate()
    {
        float moveHorizontal = Input.GetAxis("Horizontal");
        float moveVertical = Input.GetAxis("Vertical");

        Vector3 movement = new Vector3(moveHorizontal, 0.0f, moveVertical);

        transform.Translate(movement * speed * Time.deltaTime, Space.World);
    }
}
