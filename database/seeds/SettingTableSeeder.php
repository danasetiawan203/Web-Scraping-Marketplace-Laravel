<?php

use Illuminate\Database\Seeder;
use App\Model\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Setting::create( [
      'id'=>1,
      'Marketplace'=>'Tokopedia',
      'nama'=>'h1.rvm-product-title',
      'Harga'=>'div.rvm-price.mr-15',
      'deskripsi'=>'.tab-pane.fade.product-summary__content.in.active',
      'foto'=>'.content-img img'
      ] );

      Setting::create( [
      'id'=>2,
      'Marketplace'=>'Bukalapak',
      'nama'=>'h1.c-product-detail__name.qa-pd-name',
      'Harga'=>'div.c-product-detail-price',
      'deskripsi'=>'.js-collapsible-product-detail.qa-pd-description.u-txt--break-word',
      'foto'=>'a.c-product-image-gallery__image.js-product-image-gallery__image.qa-pd-image'
      ] );

      Setting::create( [
      'id'=>3,
      'Marketplace'=>'Lazada',
      'nama'=>'span.pdp-mod-product-badge-title',
      'Harga'=>'span.pdp-price.pdp-price_type_normal.pdp-price_color_orange.pdp-price_size_xl',
      'deskripsi'=>'.pdp-product-detail',
      'foto'=>'.gallery-preview-panel__content img'
      ] );

      Setting::create( [
      'id'=>4,
      'Marketplace'=>'Kriya',
      'nama'=>'div.field.field-name-title.field-type-ds.field-label-hidden',
      'Harga'=>'div.field.field-name-commerce-price.field-type-commerce-price.field-label-hidden',
      'deskripsi'=>'.field-expander.field-expander-0',
      'foto'=>'a.MagicZoomPlus img'
      ] );


      Setting::create( [
      'id'=>5,
      'Marketplace'=>'Zilingo',
      'nama'=>'h1.m-product-details__heading',
      'Harga'=>'.price__amount.row.row-no-gutter.row-middle div.amount__discount',
      'deskripsi'=>'pre.content__info',
      'foto'=>'img'
      ] );

      Setting::create( [
      'id'=>6,
      'Marketplace'=>'Zalora',
      'nama'=>'.product__title.fsm',
      'Harga'=>'span#js-price',
      'deskripsi'=>'.box.mtl.fss.clearfix',
      'foto'=>'.prd-imageBoxLayout.ui-border span img'
      ] );

      Setting::create( [
      'id'=>7,
      'Marketplace'=>'Blanja',
      'nama'=>'h1.title',
      'Harga'=>'h3#sellPrice',
      'deskripsi'=>'div#inner_desc',
      'foto'=>'div.item-box img'
      ] );

      Setting::create( [
      'id'=>8,
      'Marketplace'=>'Amazon',
      'nama'=>'span.a-size-large',
      'Harga'=>'span.a-size-medium.a-color-price',
      'deskripsi'=>'.a-section.a-spacing-extra-large.bucket',
      'foto'=>'.imgTagWrapper img'
      ] );

      Setting::create( [
      'id'=>9,
      'Marketplace'=>'Alibaba',
      'nama'=>'.ma-title',
      'Harga'=>'span.ma-ref-price span',
      'deskripsi'=>'#J-rich-text-description',
      'foto'=>'a.inner.dot-app-pd img'
      ] );

    }
}
