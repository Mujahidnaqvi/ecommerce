<h1>Current Url of the Page is = <span style="color:red;">{{URL::current()}}</span></h1>
<h1>Whole Url of the Page is = <span style="color:red;">{{URL::full()}}</span></h1>
<h1>Previous Url of your browsing is = <span style="color:red;">{{URL::previous()}}</span></h1>
<h1><a href="{{URL::to('/')}}"><button>Welcome</button></a></h1>
<h1><a href="{{URL::to('/privacy')}}"><button>Privacy</button></a></h1>
<h1><a href="{{URL::to('/products')}}"><button>Products</button></a></h1>
<h1><a href="{{URL::to('/user')}}"><button>Users</button></a></h1>
<h1><a href="{{URL::to('/about')}}"><button>About</button></a></h1>
<h1>

<form action="{{URL::to('about')}}">
<input type="text">
<button type="submit">Submite</button>
</form>
</h1>