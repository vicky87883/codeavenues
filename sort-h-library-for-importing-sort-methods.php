<!DOCTYPE html>
<html lang=en class=no-js>
<head>
<meta charset=utf-8 />
<title>sort.h Header file for importing sort method in c++</title>
<link rel=canonical href=https://www.codeavenues.com/sort-h-library-for-importing-sort-methods />
<meta name=description content="Explore our comprehensive library for importing various sorting methods. Enhance your programming skills with our wide range of sorting algorithms and techniques.">
<meta name=google-site-verification content=l4dKb_2dJnr_9AsfmgHJ6E_vIgOQxIvCn-e2VKcTfy0 />
<meta name=keywords content="sort.h,sorting,codeavenues,code,quick-sort,heap-sort,radix-sort,merge-sort,bubble-sort">
<meta name=author content=codeavenues>
<meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=theme-color content=#e8f1ff>
<link href=../images/faviconc.ico rel=icon>
<link href=../css/bootstrap.min.css rel=stylesheet>
<link href=../css/plugin.min.css rel=stylesheet>
<link href=../css/all.min.css rel=stylesheet>
<link href=instyle.css rel=stylesheet>
<link rel=preconnect href=https://fonts.gstatic.com>
<link rel=preconnect href=https://fonts.gstatic.com>
<link href=sidebar.css rel=stylesheet>
<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin=anonymous referrerpolicy=no-referrer />
<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/themes/prism.min.css>
<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/plugins/line-numbers/prism-line-numbers.min.css>
<link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
<link href=../css/style.css rel=stylesheet>
<link href=../css/responsive.css rel=stylesheet>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2HLEG6VPPV"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}
gtag('js',new Date());gtag('config','G-2HLEG6VPPV');<script async src="https://www.googletagmanager.com/gtag/js?id=G-MS2YWG5G5X"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}
gtag('js',new Date());gtag('config','G-MS2YWG5G5X');</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MS2YWG5G5X"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}
gtag('js',new Date());gtag('config','G-MS2YWG5G5X');</script>
<style>pre{position:relative;background-color:#282c34;color:#abb2bf;padding:10px;border:1px solid #61afef;border-top:30px solid #353541;border-radius:4px;white-space:pre-wrap;overflow-x:auto}pre::before{content:"Code";position:absolute;top:0;left:10px;padding:5px;color:#fff;border-radius:4px}.copy-icon{position:absolute;top:10px;right:10px;cursor:pointer}.code-icon{background-color:#333;color:#fff;padding:5px;border-radius:4px;margin-bottom:5px}</style>
</head>
<body>
<div class=onloadpage id=page-load>
<div class=loader-div>
<div class=on-img><img src=../images/loader.gif alt=Logo class=img-fluid /><span>Loading Please Wait...</span></div>
</div>
</div>
<?php include("header.php") ?>
<div class="pt85 pb120">
<div class=container>
<div class="row pt80">
<div class=col-lg-3>
<?php include("sidebar.php") ?>
</div>
<div class="col-lg-9 anchor">
<h3>
	Download Sort.h file and use it in your project
</h3>
	<br>
	<p>
	<a href="sort.h" download>
		<i class="fa-solid fa-download"></i>
		Download this file</a>
	</p>
	<br>
	<p>We have implemented all the sorting algorithms in sort.h header file with their best case complexity.</p>
	<p>If you want to implement Bubble-sort in your coding problem then we have pre-implemented in this header file your have 
	to integrate the following code in your solution.</p>
	<br>
	<h3>Bubble-Sort:</h3>
	<p>Bubble sort is a simple sorting algorithm that repeatedly steps through the list, compares adjacent elements, and swaps them if they are in the wrong order. The pass through the list is repeated until the list is sorted. The name "bubble" comes from the way smaller or larger elements "bubble" to their correct positions with each pass.</p>
	<br>
	<p>Here's a basic explanation of how Bubble Sort works:</p>
<br>
	<p>1. Start at the beginning of the list.</p>
    <p>2. Compare the first two elements. If the first element is greater than the second element, swap them.</p>
	<p>3. Move to the next pair of elements and repeat step 2.</p>
	<p>4. Continue this process, moving through the entire list, until no swaps are needed.</p>
	<p>5. The list is now sorted.</p>
	<br>
	<div class=container-box>
<pre>
    <span class="copy-icon" onclick="copyCode()">📋</span>
<code>
#include &lt;iostream&gt;
#include "sort.h"
using namespace std;
using namespace Bubble;

int main()
{
    int arr[]={10,7,8,9,1,5};
    int n=sizeof(arr)/sizeof(arr[0]);
    int *p;
    p=Bubblesort(arr,n);
    for(int i=0; i&lt;n;i++)
        cout&lt;&lt;p[i]&lt;&lt;" "<<"Complexity(O(N*N)";
}
</code>
</pre>
</div>
<p>Bubble sort is straightforward to implement and understand, making it a common choice for educational purposes. However, it is not very efficient, especially for large lists, as it has a time complexity of O(n^2) in the worst-case scenario, where n is the number of elements in the list.</p>

	<div class=container-box>
<pre>
    <span class="copy-icon" onclick="copyCode()">📋</span>
<code>
#include &lt;iostream&gt;
#include "sort.h"
using namespace std;
using namespace QuickSort;

int main() {
    int arr[]={10,7,8,9,1,5};
    int n=sizeof(arr)/sizeof(arr[0]);
    // Function call
    quickSort(arr,0,n-1);
    //Print the sorted array
    cout&lt;&lt;"Sorted Array\n";
    for(int i=0;i&lt;n;i++)
    {
	cout&lt;&lt;arr[i]&lt;&lt;" ";
    }
       return 0;
}
</code>
</pre>
</div>
	<div class=container-box>
<pre>
    <span class="copy-icon" onclick="copyCode()">📋</span>
<code>
#include &lt;iostream&gt;
#include "sort.h"
using namespace std;
using namespace Select_Sort;

int main()
{
Main function for selection sort
	int arr[]={10,12,13,14,15,23,9,4,18,19,2,16,87};
	int n=sizeof(arr)/sizeof(arr[0]);
	int *p;
	p=Selection_Sort(arr,n);
	for(int i=0;i&lt;n;i++)
	{
		cout&lt;&lt;p[i]&lt;&lt;" ";
	}
}
</code>
</pre>
</div>
	<div class=container-box>
<pre>
    <span class="copy-icon" onclick="copyCode()">📋</span>
<code>
#include &lt;iostream&gt;
#include "sort.h"
using namespace std;
using namespace InsertSort;

int main()
{
int arr[]={10,12,13,14,15,23,9,4,18,19,2,16,87};
	int n=sizeof(arr)/sizeof(arr[0]);
	int *p;
	p=Insertion_Sort(arr,n);
	for(int i=0;i&lt;n;i++)
	{
		cout&lt;&lt;p[i]&lt;&lt;" ";
	}
}
</code>
</pre>
</div>
	
<div class=container-box>
<pre>
    <span class="copy-icon" onclick="copyCode()">📋</span>
<code>
#include &lt;iostream&gt;
#include "sort.h"
using namespace std;
using namespace HSort;

int main()
{
    int arr[] = { 12, 11, 13, 5, 6, 7 };
    int N = sizeof(arr) / sizeof(arr[0]);
    int *p; 
    // Function call
    heapSort(arr, N);
    cout &lt;&lt; "Sorted array is \n";
    printArray(arr, N);
}
</code>
</pre>
</div>
	<div class=container-box>
<pre>
    <span class="copy-icon" onclick="copyCode()">📋</span>
<code>
#include &lt;iostream&gt;
#include "sort.h"
using namespace std;
using namespace RSort;

int main()
{
	int arr[] = { 543, 986, 217, 765, 329 };
	int n = sizeof(arr) / sizeof(arr[0]);

	// Function Call
	radixsort(arr, n);
	print(arr, n);
	return 0;
}
</code>
</pre>
</div>
<br>

</div>
</div>
</div>
</div>
<?php include("footer.php") ?>
<script src=../js/jquery-3.6.0.min.js></script>
<script src=../js/bootstrap.bundle.min.js></script>
<script src=../js/app.bundle.js></script>
<script src=../js/main.js></script>
<script src=snippet.js></script>
<script>function copyCode(){const codeBlock=document.querySelector('code');const range=document.createRange();range.selectNode(codeBlock);window.getSelection().removeAllRanges();window.getSelection().addRange(range);document.execCommand('copy');window.getSelection().removeAllRanges();}</script>
<script language=javascript type=text/javascript>const buttons=document.querySelectorAll(".faq-toggle");buttons.forEach((button)=>{button.addEventListener("click",()=>button.parentElement.classList.toggle("active"));});</script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/prism.min.js></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/components/prism-python.min.js></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/plugins/line-numbers/prism-line-numbers.min.js></script>
</body>
</html>