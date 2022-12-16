<?php
    $menu_item_page = "produk";
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Produk') }}</div>

                <div class="card-body">
                    @if(session()->has('success_message'))
                        <div class="alert alert-success">
                            {{ session()->get('success_message') }}
                        </div>
                    @elseif(session()->has('error_message'))
                        <div class="alert alert-danger">
                            {{ session()->get('error_message') }}
                        </div>
                    @endif

                    <form id="form_add_product" class="form-sample" method="POST" action="{{ route('add_product') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <label>Tambah Produk</label>
                        <hr>
                        <div class="form-group">
                            <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" required="">
                            <span class="invalid-feedback">
                                <strong></strong>
                            </span> 
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Kategori Produk</label>
                            <select id="select_kategori" class="form-select" name="kategori" onchange="get_sub_category()" required>
                                <option selected disabled value="">--Pilih Kategori Produk--</option>
                                @foreach($kategoris as $key => $item)
                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div id="div_select_sub_kategori" class="form-group d-none">
                            <label for="">Sub Kategori Produk</label>
                            <select id="select_subkategori" class="form-select" name="sub_kategori">
                                
                            </select>

                            <br>
                        </div>
                        
                        <div class="form-group">
                            <label>Gambar Produk</label>
                            <input id="image" type="file" class="form-control" name="image" accept="image/jpeg, image/png, image/jpg">
                            <br>
                            <img id="image_preview" style="width: 400px;height: auto;">
                        </div>
                        <br>
                        <div class="form-group">
                            <button id="btnTambahProduk" type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">

    $(document).ready(function(){
        const file = document.querySelector("#image");

        file.addEventListener("change", function(){
            const reader = new FileReader();

            reader.addEventListener("load", () => {
                document.querySelector('#image_preview').src = reader.result;
            });

            reader.readAsDataURL(this.files[0]);
        });
    });

    function get_sub_category(){
        var category_id = $('#select_kategori').val();

        if(category_id != null && category_id == 1){
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: "{{ route('get_sub_category') }}",
                data: {
                    p_kategori: category_id,
                },
                success: function(data){
                    if(data != null){
                        var option_sub_kategori = [];

                        option_sub_kategori.push('<option value="">--Pilih Sub Kategori--</option>');
                        $.each(data, function(key, value){
                            $.each(value, function(index, item){
                                option_sub_kategori.push('<option value="'+ item['id'] +'">'+ item['name'] + '</option>');
                            });
                        });

                        $('#div_select_sub_kategori').removeClass('d-none');
                        $('#select_subkategori').html(option_sub_kategori.join(' '));
                    }
                },
                error: function(response){
                    alert('Error get_sub_category, messages: ' + response);
                }
            })
        }
        else{
            $('#div_select_sub_kategori').addClass('d-none');
        }
    }
</script>
@endsection
