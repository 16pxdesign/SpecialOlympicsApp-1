//
//  ViewController.swift
//  Olympic App
//
//  Created by bill on 28/01/2020.
//  Copyright © 2020 OlympicGB. All rights reserved.
//

import UIKit
import WebKit
import AVFoundation

class ViewController: UIViewController, WKNavigationDelegate {

 
    @IBOutlet weak var loading: UIActivityIndicatorView!
    @IBOutlet weak var webView: WKWebView!
    
  
    
    
    //let urlStrig =  "simpl.info/getusermedia/sources"
    let urlStrig =  "dev.opera.com/articles/media-capture-in-mobile-browsers/demo"
    let httpProtocol = "https://"
    
    override func viewDidLoad() {
        super.viewDidLoad()
   
        switch AVCaptureDevice.authorizationStatus(for: .video){
            case .authorized:
                print("ok")
            case .notDetermined:
                AVCaptureDevice.requestAccess(for: .video){ granted in
                    if granted {
                       // self.setupCaptureSession()
                    }
                }
                print("notDetermined")

            case .restricted:
                print("restricted")
            case .denied:
                print("denied")
            @unknown default:
                print("default")
        }
        
        
        
        reload()
        
        //loading.hidesWhenStopped = true
    }
    
    
    func webView(_ webView: WKWebView, decidePolicyFor navigationAction: WKNavigationAction, decisionHandler: @escaping (WKNavigationActionPolicy) -> Void) {
        
        if navigationAction.navigationType == WKNavigationType.linkActivated {
            print("link")
            
            if let url = navigationAction.request.url {
            print(url)
            
            if true {
            //if url.host?.contains(urlStrig) ?? false {
                decisionHandler(.allow)
                return
            }else{
                UIApplication.shared.open(url)
                decisionHandler(.cancel)
                return
                }
            }
            
        return
        }
        print("no link")
        decisionHandler(.allow)

    }
    
    func webView(_ webView: WKWebView, didFinish navigation: WKNavigation!) {
        loading.stopAnimating()
        //loading.isHidden = true
        print("did finish")
        

        
    }
    
    func webView(_ webView: WKWebView, didFail navigation: WKNavigation!, withError error: Error) {
        //loading.stopAnimating()
        print("did fail")
        
        failConnectionMsg()

    }
    
    func webView(_ webView: WKWebView, didFailProvisionalNavigation navigation: WKNavigation!, withError error: Error) {
        //loading.stopAnimating()
        //errorMSG.isHidden = false
        print("did fail provisional")
        failConnectionMsg()
    }
    
    func failConnectionMsg(){
        
        let alert = UIAlertController(title: "Error", message: "Cannot connect to server. Check your Internet connection ", preferredStyle: .alert)

        alert.addAction(UIAlertAction(title: "Reload", style: .default, handler: {_ in self.reload()}))
          alert.addAction(UIAlertAction(title: "Ok", style: .cancel, handler: nil))
        
          self.present(alert, animated: true)
    }
    func reload(){
        webView.navigationDelegate = self
          let url = URL(string: httpProtocol + urlStrig)!
          let request = URLRequest(url: url)
          
          webView.load(request)
        
          webView.addSubview(loading)
          loading.startAnimating()
    }
    
}
