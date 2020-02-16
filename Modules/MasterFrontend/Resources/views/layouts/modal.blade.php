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

                <!-- Kategori Modal -->
                <div id="DeleteModal" class="modal fade text-danger" role="dialog">
                    <div class="modal-dialog ">
                        <!-- Modal content-->
                        <form action="" id="deleteForm" method="post">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-center">Konfirmasi hapus</h4>
                                </div>
                                <div class="modal-body">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <p class="text-center">yakin ingin menghapus ?</p>
                                </div>
                                <div class="modal-footer">
                                    <center>
                                        <button type="button" class="btn btn-success"
                                            data-dismiss="modal">Batalkan</button>
                                        <button type="submit" name="" class="btn btn-danger" data-dismiss="modal"
                                            onclick="formSubmit()">Ya, Hapus</button>
                                    </center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Modal Kategori -->

                <!-- Tags Modal -->
                <div id="DeleteModalTags" class="modal fade text-danger" role="dialog">
                    <div class="modal-dialog ">
                        <!-- Modal content-->
                        <form action="" id="deleteForm" method="post">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-center">Konfirmasi hapus</h4>
                                </div>
                                <div class="modal-body">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <p class="text-center">yakin ingin menghapus ? <b><span class="tagsName" style="color: red"></span></b></p>
                                </div>
                                <div class="modal-footer">
                                    <center>
                                        <button type="button" class="btn btn-success"
                                            data-dismiss="modal">Batalkan</button>
                                        <button type="submit" name="" class="btn btn-danger" data-dismiss="modal"
                                            onclick="formSubmit()">Ya, Hapus</button>
                                    </center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Modal Kategori -->
