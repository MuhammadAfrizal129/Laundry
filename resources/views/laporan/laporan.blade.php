<table border="1">
                <thead>
                  <tr>
                    <th class="text-center text-white">No</th>
                    <th class="text-center text-white">Id</th>
                    <th class="text-center text-white">Tanggal</th>
                    <th class="text-center text-white">Member</th>
                    <th class="text-center text-white">Paket</th>
                    <th class="text-center text-white">Berat (KG)</th>
                    <th class="text-center text-white">Biaya Tambahan</th>
                    <th class="text-center text-white">Harga Total</th>
                    <th class="text-center text-white">Tanggal Bayar</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                     $i = 1; 
                    @endphp
                    @foreach ($transaksi as $item)
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td class="text-center text-white">{{$item->id_transaksi}}</td>
                            <td class="text-center text-white">{{$item->tanggal}}</td>
                            <td class="text-center text-white">{{$item->nama}}</td>
                            <td class="text-center text-white">{{$item->nama_paket}}</td>
                            <td class="text-center text-white">{{$item->berat}}</td>
                            <td class="text-center text-white">{{$item->biaya_tambahan}}</td>
                            <td class="text-center text-white">{{$item->harga_total}}</td>
                            <td class="text-center text-white">{{$item->tgl_bayar}}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
                
        </table>