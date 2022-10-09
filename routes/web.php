<?php

Route::prefix('bkash/payment')->group(function(){
  Route::post('create', [BkashPaymentController::class, 'payment'])->name('bkash.payment.create');
});