<h3> This Is Product Form</h3>
<div>
    {{--
    @if ($errors->any())
    @foreach ( $errors->all() as $error )
      {{$error}}
    @endforeach
    @endif --}}
 <form action="/getFormData" method="POST">
    @csrf
   <p><input type="text" name="product_name" placeholder="Enter Product Name"></p>
    <span> @error('product_name')
        {{$message}}
    @enderror</spam>
   <p><input type="text" name="product_sku" placeholder="Enter Product SKU"> </p>
   <span> @error('product_sku')
       {{$message}}
   @enderror</span>
   <p> <input type="submit" value="Save Product"></p>
 </form>
</div>