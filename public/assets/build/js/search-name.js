 $('.itemNameTransaksi').select2({
        placeholder: 'Select an item',
        ajax: {
          delay: 250,
          url: "{{url('/form/search-name-transaksi/')}}",
          dataType: 'json',
          processResults: function (data) {
            return {
              results:  $.map(data, function (item) {
                    return {
                        text: item.nama,
                        id: item.id,
                    }
                })
            };
          },
          cache: true
        }
      });

  $('.itemProdukTransaksi').select2({
        placeholder: 'Select an item',
        ajax: {
          delay: 250,
          url: "{{url('/form/search-produk-transaksi/')}}",
          dataType: 'json',
          processResults: function (data) {
            return {
              results:  $.map(data, function (item) {
                    return {
                        text: item.nama,
                        id: item.id,
                    }
                })
            };
          },
          cache: true
        }
      });