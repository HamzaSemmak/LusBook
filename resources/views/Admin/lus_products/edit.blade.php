@extends('layout.dashboard')

@section('content')
    <?php 
        $categorie = array('HISTOIRE', 'VOYAGE', 'DROIT', 'AFFAIRES' , 'SCIENCE', 'FINANCE' , 'SPORT', 'MANGA');
        $name = '';
        $id = '';
        $price = 0;
        $author = '';
        $category = '';
        $description = '';
        $photo = '';
        foreach ($Products as $key) {
            $name = $key->name;
            $id = $key->id;
            $price = $key->price;
            $author = $key->author;
            $category = $key->category;
            $description = $key->description;
            $photo = $key->photo;
        }
    ?>
    <div class="dashboard-title"> 
        <i class="fa-solid fa-cart-shopping"></i>
        <span> Produits </span>
    </div>
    <div class="form-controll-product">
        <form action="/EditProduct/{{ $id }}" method="POST" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-4">
                <label> photo <span class="red-marque"> * </span></label>
                <input type="file" name="photo" class="form-control" value="{{$photo}}" >
                @error('photo') <span class="msg-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-4">
                <label> Product Name <span class="red-marque"> * </span></label>
                <input type="text" name="name" placeholder="Product Name" class="form-control" value="{{$name}}">
                @error('name') <span class="msg-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-4">
                <label> author <span class="red-marque"> * </span></label>
                <input type="text" name="author" placeholder="Author" class="form-control" value="{{$author}}">
                @error('author') <span class="msg-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-4">
                <label> Prix <span class="red-marque"> * </span></label>
                <input type="number" name="price" placeholder="Prix" class="form-control" value="{{$price}}">
                @error('price') <span class="msg-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-4">
                <label> categorie <span class="red-marque"> * </span></label>
                <select name="category" class="form-control">
                    <option selected> {{$category}} </option>
                    @foreach ($categorie as $item)
                        <option value="{{ $item }}"> {{ $item }} </option>
                    @endforeach
                </select>
                @error('category') <span class="msg-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label> description <span class="red-marque"> * </span></label>
                <textarea name="description" placeholder="description" class="form-control"cols="30" rows="10">{{$description}}</textarea>
                @error('description') <span class="msg-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn-primary"> Enregistrer </button>
            </div>
        </form>
    </div>
@endsection
 