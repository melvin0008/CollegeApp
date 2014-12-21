mitcoe.directive("showsMessageWhenHovered", function() {
  return {
    restrict: "A", // A = Attribute, C = CSS Class, E = HTML Element, M = HTML Comment
    link: function(scope, element, attributes) {
      var originalMessage = scope.message;
      element.bind("mouseenter", function() {
        scope.message = attributes.message;
        scope.$spacedeckly();
      });
      element.bind("mouseleave", function() {
        scope.message = originalMessage;
        scope.$spacedeckly();
      });
    }
  };
});
