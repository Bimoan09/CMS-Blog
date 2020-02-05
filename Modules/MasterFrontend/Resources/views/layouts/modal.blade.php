                <!-- Modal Category-->
                <div class="modal fade" id="modalCategory" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
                    role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-simple">
                        <form class="modal-content" action="{{route('admin.category.store')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title" id="exampleFormModalLabel">Buat Kategori</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xl-12 form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Kategori">
                                    </div>
                                    <div class="col-xl-12 form-group">
                                        <input type="text" class="form-control" name="slug" placeholder="Slug">
                                    </div>
                                    <div class="col-xl-12 form-group">
                                        <input type="text" class="form-control" name="meta_tag_description"
                                            placeholder="Meta tag">
                                    </div>
                                    <div class="col-xl-12 form-group">
                                        <select class="custom-select custom-select-lg mb-3" name="asigned">
                                            <option selected>Asign ke member ?</option>
                                            <option value="1">Ya</option>
                                            <option value="2">Tidak</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-sm">Simpan</button>
                        </form>
                    </div>
                </div>
                <!-- End Modal -->


                <!-- modal delete -->

                <div id="categoryDelete" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body">
                                <div class="deleteContent">
                                    Apa Anda yakin ingin menghapus Data Kategori <b><span class="categoryName"
                                            style="color: red"></span></b> ?
                                    <span class="hidden did"></span>
                                </div>
                                <div class="modal-footer">
                                 <a class="btn btn-danger delete_user" href="{{route('admin.category.deleteCategory', $value->id)}}" id="{{$value->id}}">Hapus</a> -
                                    <button type="button" class="btn btn-sm btn-warning" data-dismiss="modal">
                                        <span class='glyphicon glyphicon-remove'></span> Batalkan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            

                <!-- end modal delete -->
