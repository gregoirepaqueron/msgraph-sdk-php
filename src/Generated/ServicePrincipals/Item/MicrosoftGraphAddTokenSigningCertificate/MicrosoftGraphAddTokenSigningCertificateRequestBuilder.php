<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\MicrosoftGraphAddTokenSigningCertificate;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SelfSignedCertificate;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to call the addTokenSigningCertificate method.
*/
class MicrosoftGraphAddTokenSigningCertificateRequestBuilder 
{
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new MicrosoftGraphAddTokenSigningCertificateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/microsoft.graph.addTokenSigningCertificate';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Create a self-signed signing certificate and return a selfSignedCertificate object, which is the public part of the generated certificate.  The self-signed signing certificate is composed of the following objects, which are added to the servicePrincipal: + The keyCredentials object with the following objects:    + A private key object with **usage** set to `Sign`.    + A public key object with **usage** set to `Verify`.+ The passwordCredentials object.  All the objects have the same value of **customKeyIdentifier**. The **passwordCredential** is used to open the PFX file (private key). It and the associated private key object have the same value of **keyId**. When set during creation through the **displayName** property, the subject of the certificate cannot be updated. The **startDateTime** is set to the same time the certificate is created using the action. The **endDateTime** can be up to three years after the certificate is created.
     * @param AddTokenSigningCertificatePostRequestBody $body The request body
     * @param MicrosoftGraphAddTokenSigningCertificateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/serviceprincipal-addtokensigningcertificate?view=graph-rest-1.0 Find more info here
    */
    public function post(AddTokenSigningCertificatePostRequestBody $body, ?MicrosoftGraphAddTokenSigningCertificateRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [SelfSignedCertificate::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create a self-signed signing certificate and return a selfSignedCertificate object, which is the public part of the generated certificate.  The self-signed signing certificate is composed of the following objects, which are added to the servicePrincipal: + The keyCredentials object with the following objects:    + A private key object with **usage** set to `Sign`.    + A public key object with **usage** set to `Verify`.+ The passwordCredentials object.  All the objects have the same value of **customKeyIdentifier**. The **passwordCredential** is used to open the PFX file (private key). It and the associated private key object have the same value of **keyId**. When set during creation through the **displayName** property, the subject of the certificate cannot be updated. The **startDateTime** is set to the same time the certificate is created using the action. The **endDateTime** can be up to three years after the certificate is created.
     * @param AddTokenSigningCertificatePostRequestBody $body The request body
     * @param MicrosoftGraphAddTokenSigningCertificateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AddTokenSigningCertificatePostRequestBody $body, ?MicrosoftGraphAddTokenSigningCertificateRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}