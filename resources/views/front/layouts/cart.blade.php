<div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">

    <!-- Header -->
    <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
      <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
        <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <p class="fs-sm">Buy <span class="text-dark-emphasis fw-semibold">$53</span> more to get <span class="text-dark-emphasis fw-semibold">Free Shipping</span></p>
      <div class="progress w-100" role="progressbar" aria-label="Free shipping progress" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
        <div class="progress-bar bg-dark rounded-pill d-none-dark" style="width: 78%"></div>
        <div class="progress-bar bg-light rounded-pill d-none d-block-dark" style="width: 78%"></div>
      </div>
    </div>

    <!-- Items -->
    <div class="offcanvas-body d-flex flex-column gap-4 pt-2">

      <!-- Item -->
      <div class="d-flex align-items-center">
        <a class="flex-shrink-0" href="shop-product-fashion.html">
          <img src="{{asset('front/img/shop/fashion/thumbs/07.png')}}" class="bg-body-tertiary rounded" width="110" alt="Thumbnail">
        </a>
        <div class="w-100 min-w-0 ps-3">
          <h5 class="d-flex animate-underline mb-2">
            <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-fashion.html">Leather sneakers with golden laces</a>
          </h5>
          <div class="h6 pb-1 mb-2">$74.00</div>
          <div class="d-flex align-items-center justify-content-between">
            <div class="count-input rounded-2">
              <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                <i class="ci-minus"></i>
              </button>
              <input type="number" class="form-control form-control-sm" value="1" readonly="">
              <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                <i class="ci-plus"></i>
              </button>
            </div>
            <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="d-flex align-items-center">
        <a class="flex-shrink-0" href="shop-product-fashion.html">
          <img src="{{asset('front/img/shop/fashion/thumbs/08.png')}}" class="bg-body-tertiary rounded" width="110" alt="Thumbnail">
        </a>
        <div class="w-100 min-w-0 ps-3">
          <h5 class="d-flex animate-underline mb-2">
            <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-fashion.html">Classic cotton men's shirt</a>
          </h5>
          <div class="h6 pb-1 mb-2">$27.00</div>
          <div class="d-flex align-items-center justify-content-between">
            <div class="count-input rounded-2">
              <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                <i class="ci-minus"></i>
              </button>
              <input type="number" class="form-control form-control-sm" value="1" readonly="">
              <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                <i class="ci-plus"></i>
              </button>
            </div>
            <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
          </div>
        </div>
      </div>

      <!-- Item -->
      <div class="d-flex align-items-center">
        <a class="flex-shrink-0" href="shop-product-fashion.html">
          <img src="{{asset('front/img/shop/fashion/thumbs/09.png')}}" class="bg-body-tertiary rounded" width="110" alt="Thumbnail">
        </a>
        <div class="w-100 min-w-0 ps-3">
          <h5 class="d-flex animate-underline mb-2">
            <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-fashion.html">Polarized sunglasses for men</a>
          </h5>
          <div class="h6 pb-1 mb-2">$96.00 <del class="text-body-tertiary fs-xs fw-normal">112.00</del></div>
          <div class="d-flex align-items-center justify-content-between">
            <div class="count-input rounded-2">
              <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                <i class="ci-minus"></i>
              </button>
              <input type="number" class="form-control form-control-sm" value="1" readonly="">
              <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                <i class="ci-plus"></i>
              </button>
            </div>
            <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="offcanvas-header flex-column align-items-start">
      <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-md-4">
        <span class="text-light-emphasis">Subtotal:</span>
        <span class="h6 mb-0">$197.00</span>
      </div>
      <div class="d-flex w-100 gap-3">
        <a class="btn btn-lg btn-secondary w-100" href="#!">View cart</a>
        <a class="btn btn-lg btn-dark w-100" href="#!">Checkout</a>
      </div>
    </div>
  </div>