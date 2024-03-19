
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<title>Introduction to Abstract Datatypes (ADT)</title>
<meta name="description" content="What is an abstract data types and its significance in programming.Let's discuss in depth and grab deep knowledge.">
<meta name="keywords" content="
							  data structure,
							   data structures and algorithms,
							   data structures in python,
							   data structure mcq,
							   data structures in java,
							   data structures in c#,
							   data structures interview questions,
							   data structures and algorithms in java,
							   data structures and algorithms in javascript,
							   data structures and algorithms in python pdf
							   ">
<meta name="author" content="codeavenues">
	
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="theme-color" content="#e8f1ff">

<link href="../images/faviconc.ico" rel="icon">
<link rel=canonical href=https://www.codeavenues.com/datastructure/introduction-to-datastructure />
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/plugin.min.css" rel="stylesheet">
<link href="../css/all.min.css" rel="stylesheet">
<link href="sidebar.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Varela+Round&display=swap" rel="stylesheet">

<link href="../css/style.css" rel="stylesheet">
<link href="../css/responsive.css" rel="stylesheet">
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="../css/upstyle.css">
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MS2YWG5G5X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MS2YWG5G5X');
</script>
	<style>
	.textcol{
		color:#7a2640;
		}
		.col-text{
			color:#273239;
		}
		.headcol{
			color:#7a2640;
		}
	</style>
</head>
<body>

<div class="onloadpage" id="page-load">
<div class="loader-div">
<div class="on-img"><img src="../images/loader.gif" alt="Logo" class="img-fluid"><span>Loading Please Wait...</span></div>
</div>
</div>
<?php include('header.php') ?>

<div class="r-bg-x pb120 r-bg-a" style="padding-top:150px">
<div class="container">
<div class="blog-details">
<div class="row">
	<div class="col-lg-3 collapse-body">
<?php include('sidebar.php') ?>
	</div>
<div class="col-lg-9">
	
<div class="ree-blog-details">
<div class="info-bar">
	<h1 class=headcol>Introduction to Abstract Datatypes (ADT)</h1>
</div>
	<p class=col-text>Before understanding abstract datatypes let's discuss different inbuilt datatypes that are provided to us. Inbuilt datatypes are integer, float, double, character, etc. These datatypes are pre-defined in our compiler and we are using these datatypes as a container for storing values. An abstract data type (ADT) refers to a set of data values and associate operations that are specified accurately, independent of any particular implementation. ADT consists of a set of definitions that allow us to use the routines while hiding the implementation.</p>
	<h4 class=headcol>Definition of ADT (Abstract data types):</h4>
	<p class=col-text>An abstract data type (ADT) refers to a set of data values and associated operations that are specified accurately(like a class and objects that are associated with it), independent of any particular implementation. With an ADT, we know what a specific data type can do, but how it actually does it is hidden. we can represent ADT only with pen and paper. we are not able to represent inside memory which is not possible physically.</p>
	<h4 class=headcol>Types of ADT(Abstract data types)</h4>
	<p class=col-text>We classified ADT into four categories according to its structure and operations associated with it. Consider a list L consisting of data items - 1, 2, 3, 4, 5, 6, 7, 8, 9. We can use any of four data structures to support A linear list, a stack, a queue, a tree, or graph, etc.</p>
	<p class=col-text><b>1. Linear List ADT</b>:- It linearly stores the data and we can traverse data continuously by using loops or iterators. In this category data structures like array, and LinkedList(hold the pointer that contains the address of the next node) come.</p>
	<div class=container>
	<img src=dsimage/list.png width=100%/>
	</div>
	<p class=col-text>Its operations:- </p>

	<p class=col-text>i)Insertion: we can insert the element linearly in our data structure.</p>
	<p class=col-text>ii)Deletion: we can delete elements from the data structure.</p>
	<p class=col-text>iii)Traversing: we can traverse or display the elements.</p>
	<p class=col-text>iv) length: we can count the number of records in the list.</p>
	<p class=col-text>v)Isempty: we can check the list if any element is present in the list or not.</p>
	<p class=col-text>vi)Isfull: we can check if the list is full or not.</p>
	<p class=col-text>vii)replace: we also can replace any element in this data structure.</p>
	<p class=col-text><b>2. Stack:</b> It is the most important data structure that comes under the category of ADT. Stack is working on the LIFO principle which means "Last-In-First-Out". The element that has been inserted last comes first in the stack.</p>
	<div class=container>
	<img src=dsimage/stack.png width=100%/>
	</div>
	<p class=col-text>Its operations:-</p>

<p class=col-text>i)Push: we can perform a push operation which means the insertion of an element in the stack.</p>

	<p class=col-text>ii)Pop: we can pop the elements which means delete an element from the stack.</p>

	<p class=col-text>iii)Isfull: we can check whether the stack is full or not.</p>

	<p class=col-text>iv)Isempty: we can check whether the stack is empty or not.</p>

	<p class=col-text>v)Top: which will give you the top element in the stack.</p>

	<p class=col-text>vi)Size: it will return you the size of the stack.</p>
	
	
	
	
	<p class=col-text><b>3. Queue</b>: It is also the most important data structure that comes under the category of ADT. The queue is working on the FIFO principle which means "First-In-First-Out". The element that has been inserted first comes first from the queue.</p>
	<p class=col-text>Its operations</p>:-
<div class=container>
	<img src=dsimage/queue.png width=100%/>
	</div>
<p class=col-text>i)Enqueue: we can insert elements into the queue from the rear and can return the inserted element.</p>

<p class=col-text>ii)Dequeue: we can delete the inserted element only from the front end and can return the deleted element.</p>

	<p class=col-text>iii)Size: we also can return the size of the element by using size() function.</p>

	<p class=col-text>iv)Isfull: we can return the "Null" if the queue is full.</p>

	<p class=col-text>v)Isempty: we can return the element if the queue is empty.</p>
</div>
<div class="center-btn"> <a href="https://www.codeavenues.com/blog" class="ree-btn  ree-btn-grdt2 mr20">Back to Blogs <i class="fas fa-arrow-left fa-btn"></i></a> </div>
</div>
</div>
</div>
</div>
</div>


<?php include('footer.php') ?>

<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/app.bundle.js"></script>
<script src="../js/main.js"></script>
<script language="javascript" type="text/javascript">
const buttons = document.querySelectorAll(".faq-toggle");

buttons.forEach((button) => {
  button.addEventListener("click", () =>
    button.parentElement.classList.toggle("active")
  );
});

</script>
</body>
</html>